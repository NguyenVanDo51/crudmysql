<?php 
require_once("dp.php");
require_once("component.php");

$conn = createdb();
$message = "";

if (isset($_POST['create'])) {
    createData($conn);
}

if (isset($_POST['delete'])) {
    $id = textboxValue('book_id');
    if($id) {
        $sql = "DELETE FROM book WHERE id=$id";
        $conn->exec($sql);
    }
    $message = "Deleted id = $id";
}

if (isset($_POST['update'])) {
    update($conn);
}

function update($conn) {
    $id = textboxValue('book_id');
    $bookname = textboxValue('book_name');
    $bookpublisher = textboxValue('book_publisher');
    $bookprice = textboxValue('book_price');

    if($id && $bookname && $bookpublisher && $bookprice) {
        $sql = "UPDATE book 
                SET book_name=$bookname, book_publisher=$bookpublisher, book_price=$bookprice
                WHERE id = $id
                ";
        $conn->exec($sql);
        // $message = "Update success id = $id";
        echo $sql;
    }else {
        $message = "Error! Check your input.";
    }
}

function loaddb($conn, &$message) {
    $stmt = $conn->prepare("SELECT * FROM book");  // tao 1 luong xu ly, voi cau query
    $stmt->execute(); // Thuc thi cau query
    $message = "Data has been update!";
    return $stmt->fetchAll();
}


function createData($conn) {
    $bookname = textboxValue('book_name');
    $bookpublisher = textboxValue('book_publisher');
    $bookprice = textboxValue('book_price');
    if($bookname && $bookpublisher && $bookprice) {
        $sql = "INSERT INTO book (book_name, book_publisher, book_price)
                VALUES ($bookname, $bookpublisher, $bookprice);";

        $conn->exec($sql);
        $message = "Created $bookname";
    }
}

function textboxValue($name) {
    $textbox = trim($_POST[$name]);
    if(empty($textbox)) {
        return false;
    }else {
        return $textbox;
    }
}

?>