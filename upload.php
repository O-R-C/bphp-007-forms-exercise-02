<?php

declare(strict_types=1);

$file_name = $_POST['file_name'];

if (!$file_name) {
  echo 'file_name is empty';
  header('Location: index.html');
}

$file = $_FILES['file'];

if ($file['error']) {
  echo $file['error'];
  header('Location: index.html');
}


if (move_uploaded_file($file['tmp_name'], "./upload/{$file_name}")) {
  echo "Файл $file_name успешно загружен" . PHP_EOL;
} else {
  echo "Произошла ошибка при загрузке" . PHP_EOL;
}

echo '<pre>';
var_dump($file);
echo '</pre>';
