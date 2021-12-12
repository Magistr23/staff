<?php
function print_arr($arr) {
	echo '<pre>'  . print_r($arr, true) .  '</pre>';
}
function get_tests(){
	global $db;
	$quere = "SELECT * FROM test WHERE enable = '1'";
	$res = mysqli_query($db, $quere);
	if(!$res) return false;
	$data = array();
	while($row = mysqli_fetch_assoc($res)) {
		$data[] = $row;
	}
	return $data;
}
function get_test_data($test_id){
	if(!$test_id) return;
	global $db;
	$query = "SELECT q.question, q.parent_test, a.id, a.answer, a.parent_question
	FROM questions q
	LEFT JOIN answers a
		ON q.id = a.parent_question
		LEFT JOIN test
			ON test.id = q.parent_test
			WHERE q.parent_test = $test_id AND test.enable = '1'";
	$res = mysqli_query($db, $query);
	$data = null;
	while($row = mysqli_fetch_assoc($res)){
		if(!$row['parent_question']) return false;
		$data[$row['parent_question']] [0] = $row['question'];
		$data[$row['parent_question']] [$row['id']] = $row['answer'];
	}
	return $data;
}
function get_correct_answers($test) {
	if (!$test) return false;
	global $db;
	$query = "SELECT q.id AS question_id, a.id AS answer_id
		FROM questions q
		LEFT JOIN answers a
			ON q.id = a.parent_question
		LEFT JOIN test
			ON test.id = q.parent_test
			WHERE q.parent_test = $test AND a.correct_answer = '1' AND test.enable = '1'";
	$res = mysqli_query($db, $query);
	$data = null;
	while($row = mysqli_fetch_assoc($res)){
		$data[$row['question_id']] = $row['answer_id'];
	}
	return $data;
}
function pagination($count_questions, $test_data){
	$keys = array_keys($test_data);
	$pagination = '<div class="pagination">';
		for($i = 1; $i <= $count_questions; $i++){
			$key = array_shift($keys);
			if($i == 1) {
				$pagination .= '<a class="nav-active" href="#question-' . $key . '">' . $i . '</a>';
			}else{
				$pagination .= '<a href="#question-' . $key . '">' . $i . '</a>';
			}
		}
	$pagination .= '</div>';
	return $pagination;
}
function get_test_data_result($test_all_data, $result /*$_POST*/){
	foreach($result as $q => $a){
		$test_all_data[$q]['correct_answer'] = $a;
		if(!isset($_POST[$q])){
			$test_all_data[$q]['incorrect_answer'] = 0;
		}
	}
	foreach($_POST as $q => $a){
		if(!isset($test_all_data[$q])){
			unset($_POST[$q]);
			continue;
		}
		if(!isset($test_all_data[$q][$a])){
			$test_all_data[$q]['incorrect_answer'] = 0;
			continue;
		}
		if($test_all_data[$q]['correct_answer']!=$a){
			$test_all_data[$q]['incorrect_answer'] = $a;
		}
	}
	return $test_all_data;
}
function print_result($test_all_data_result){
	$all_count = count($test_all_data_result);
	$correct_answer_count = 0; // верные ответы
	$incorrect_answer_count = 0; // не верные ответы
	$percent = 0; // процент
	foreach($test_all_data_result as $item){
		if(isset($item['incorrect_answer']))$incorrect_answer_count++;
	}
	$correct_answer_count = $all_count - $incorrect_answer_count;
	$percent = ceil($correct_answer_count / $all_count * 100);
	// вывод результатов
	$print_res = '<div class="questions">';
	$print_res .= '<div class="count-res">';
	$print_res .= "<p>Всего вопросов: <b>{$all_count}</b></p>";
	$print_res .= "<p>Отвечено верно: <b>{$correct_answer_count}</b></p>";
	$print_res .= "<p>Отвечено не верно: <b>{$incorrect_answer_count}</b></p>";
	$print_res .= "<p>Процент верных ответов: <b>{$percent}</b></p>";
	$print_res .= '</div>';
	$print_res .= '</div>';
	
	return $print_res;
}
?>