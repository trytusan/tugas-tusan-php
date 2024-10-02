<?php
$con->auth();
$conn = $con->koneksi();

switch (@$_GET['page']) {
    case 'add':
        $sql_keterangan = "SELECT keterangan_staff FROM keterangan";
        $result_keterangan = $conn->query($sql_keterangan);
    
        $keterangan = [];
        if ($result_keterangan->num_rows > 0) {
            while ($row = $result_keterangan->fetch_assoc()) {
                $keterangan[] = $row;
            }
        }

        $content = "view/dokter/add.php";
        include_once 'view/dokter/template.php';
        break;

    case 'save':
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $sql = "INSERT INTO struktur_pengurus (nama, jabatan, ket_staff) 
                    VALUES ('$_POST[nama]', '$_POST[jabatan]', '$_POST[ket_staff]')";

            if ($conn->query($sql) === TRUE) {
                header('Location: ' . $con->site_url().'/admin/index.php?mod=dokter');
            } else {
                echo 'Error: ' . $sql . "<br>" . $conn->error;
            }
        } else {
            $err['msg'] = "Tidak Diijinkan";
        }

        if (isset($err)) {
            $content = "php_test1/admin/view/dokter/add.php";
            include_once 'php_test1/admin/view/dokter/template.php';
        }
        break;

    case 'delete':
        $dokter ="DELETE FROM struktur_pengurus WHERE md5(id_staff)='$_GET[id]'";
        $dokter=$conn->query($dokter);
        header('Location: '.$con->site_url().'/admin/index.php?mod=dokter');
        break;

    case 'edit':
        $sql_keterangan = "SELECT keterangan_staff FROM keterangan";
        $result_keterangan = $conn->query($sql_keterangan);
    
        $keterangan = [];
        if ($result_keterangan->num_rows > 0) {
            while ($row = $result_keterangan->fetch_assoc()) {
                $keterangan[] = $row;
            }
        }

        $id = $_GET['id'];
        $stmt = $conn->prepare("SELECT * FROM struktur_pengurus WHERE md5(id_staff) = ?");
        $stmt->bind_param('s', $id);
        $stmt->execute();
            
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            $_POST = $result->fetch_assoc();
        } else {
            echo "Data tidak ditemukan!";
            exit;
        }
        
        $content = "view/dokter/edit.php";
        include_once 'view/dokter/template.php';
        break;

    case 'update':
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $sql = "UPDATE struktur_pengurus 
                    SET nama = '$_POST[nama]', jabatan = '$_POST[jabatan]', ket_staff = '$_POST[ket_staff]' 
                    WHERE id_staff = '$_POST[id_staff]'";

            if ($conn->query($sql) === TRUE) {
                header('Location: ' . $con->site_url() . '/admin/index.php?mod=dokter');
            } else {
                echo 'Error: ' . $sql . "<br>" . $conn->error;
            }
        } else {
            $err['msg'] = "Tidak Diijinkan";
        }

        if (isset($err)) {
            $content = "php_test1/admin/view/dokter/edit.php";
            include_once 'php_test1/admin/view/dokter/template.php';
        }
        break;

    default:
        $sql = "SELECT * FROM struktur_pengurus";
        $dokter = $conn->query($sql);
        $conn->close();
        $content = "view/dokter/tampil.php";
        include_once 'view/dokter/template.php';
}
?>
