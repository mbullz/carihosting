<?php
	require('connect.php');

	$mode = $_GET['mode'];
	$result = array();
	$status = true;

	switch ($mode) {
		case 'index_chat':
			$last_chat_id = $_POST['last_chat_id'];

			$rs = $mysqli->query("SELECT * FROM chats WHERE chat_id > $last_chat_id ORDER BY created_at ASC");

			$chats = array();
			while ($data = $rs->fetch_assoc()) {
				$name = $data['name'];
				if ($name == 'Administrator') $name = '<font color="red">' . $name . '</font>';

				array_push($chats, array(
					'chat_id'		=> $data['chat_id'],
					'name'			=> $name,
					'email'			=> $data['email'],
					'message'		=> nl2br($data['message']),
					'created_at'	=> date('j M Y - H:i', strtotime($data['created_at'])),
				));
			}

			$result = array(
				'mode'		=> $mode,
				'status'	=> $status,
				'data'		=> $chats,
			);
		break;

		case 'store_chat':
			$name = $_POST['name'] ?? '';
			$email = $_POST['email'] ?? '';
			$message = $_POST['message'] ?? '';

			if ($name == '' || $email == '' || $message == '') $status = false;

			$name = ucwords(strtolower($name));

			if (strtoupper($name) == 'ADMINISTRATOR') $name = 'Anonymous';
			if (strtoupper($name) == 'KELOMPOK6OKE') $name = 'Administrator';

			if ($status) {
				$mysqli->query("INSERT INTO chats(name, email, message, created_at) VALUES('$name', '$email', '$message', NOW())");
			}

			$result = array(
				'mode'		=> $mode,
				'status'	=> $status,
			);
		break;
	}

	echo json_encode($result);
?>
