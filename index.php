<?php
// Adding pagetitle and header
$pagetitle = "Welcome to foodplace";
require_once "assets/header.php";
// $password = "Qwertyuiop@1";
// echo $password . "<br/>";
// echo sha1($password) . "<br/>";
// echo md5($password) . "<br/>";
// echo password_hash($password, PASSWORD_DEFAULT) . "<br/>";
$picError = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $picture = $_FILES['picture'];
    echo "<pre>";
    var_dump($picture);
    echo "</pre>";

    // Validate Image
    $filesize = 3 * 1024 * 1024;
    $location = "profilepictures/";
    if($picture['error'] == 0) {
        if($picture['type'] == 'image/png' || $picture['type'] == 'image/jpg' || $picture['type'] == 'image/jpeg') {
            if($picture['size'] <= $filesize) {
                $filename = uniqid('foodplace_') . "." . pathinfo($picture['name'], PATHINFO_EXTENSION);
                $filelocation = $location . $filename;
                echo $filelocation;
                move_uploaded_file($picture['tmp_name'], $filelocation);
            } else {
                $picError = "File is too large";
            }
        } else {
            $picError = $picture['type'] . " not supported";  
        }

    } else {
        $picError = "Upload Error";
    }
}
?>
<h1 class="text-3xl font-bold underline">Hello World</h1>
<form class="space-y-4 md:space-y-6" action="" method="post" enctype="multipart/form-data">
    <!-- Profile Picture Upload -->
    <div class="flex flex-col items-center justify-center w-full">
        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="inline-block size-50 rounded-full ring-2 ring-white outline -outline-offset-1 outline-black/5" id="display" />

        <label class="block mb-2.5 text-sm font-medium text-heading" for="file_input">Upload file</label>
        <input class="cursor-pointer w-full text-white bg-brand hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 shadow-xs placeholder:text-body" id="file_input" type="file" name="picture" accept="image/png, image/jpeg, image/jpg" />
        <span class="text-red-600"><?= $picError ?></span>

    </div>
    <button type="submit" class="w-full text-white bg-brand hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Create an account</button>
</form>

<script>
    const picture = document.getElementById('file_input');
    const display = document.getElementById('display');

    picture.addEventListener('change', (e) => {
        let file = e.target.files[0];
        console.log(file);
        if (file.type === "image/png" || file.type === "image/jpg" || file.type === "image/jpeg") {
            display.src = URL.createObjectURL(file);
            display.style.backgroundPosition = 'contain';
        } else {
            alert("File type not supported");
        }

    })
</script>