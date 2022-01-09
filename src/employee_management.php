<?php require('config.php');
function fetch_list()
{
    global $connect;
    $sql = "SELECT * FROM `nhanvien`";
    return mysqli_query($connect, $sql);
}

function add($hovaten, $chucvu, $phongban, $luong)
{
    global $connect;
    $sql = "INSERT INTO `nhanvien` (hovaten, chucvu, phongban, luong) VALUES
    ('$hovaten', '$chucvu', '$phongban', $luong);";
    mysqli_query($connect, $sql);
}

function edit($maNV, $hovaten, $chucvu, $phongban, $luong)
{
    global $connect;
    $sql = "UPDATE `nhanvien` SET hovaten = $hovaten, chucvu = $chucvu, phongban = $phongban, luong = $luong WHERE maNV = $maNV";
    mysqli_query($connect, $sql);
}

function delete($maNV)
{
    global $connect;
    $sql = "DELETE FROM `nhanvien` WHERE maNV = $maNV";
    mysqli_query($connect, $sql);
}
