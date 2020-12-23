<?php
    session_start();
    require("Connection.php");

    $email = !empty($_REQUEST['email'])?$_REQUEST['email']:'';
    $senha = !empty($_REQUEST['pass'])?$_REQUEST['pass']:'';
//-----------------------------------------------------------------------------------------------------------------------------------------//
    if($email&&$senha) {
        $consulta = "SELECT * FROM administradores WHERE email  = '$email' AND senha = '$senha'";
        $resultado = $connection->query($consulta);
        $registros = $resultado->num_rows;
        $resultado_usuario = mysqli_fetch_assoc($resultado);

        if ($registros<>0) {
            $_SESSION['codAdmin'] = $resultado_usuario['codAdmin'];
            $_SESSION['nome'] = $resultado_usuario['nome'];
            $_SESSION['email'] = $resultado_usuario['email'];

            header('location:../adm.php');
        }
        else{
            if($email&&$senha) {
        $consulta = "SELECT * FROM usuarios WHERE email  = '$email' AND senha = '$senha'";
        $resultado = $connection->query($consulta);
        $registros = $resultado->num_rows;
        $resultado_usuario = mysqli_fetch_assoc($resultado);

                if ($registros<>0) {
                    $_SESSION['codUsuario'] = $resultado_usuario['codUsuario'];
                    $_SESSION['nomeUsuario'] = $resultado_usuario['nome'];
                    $_SESSION['emailUsuario'] = $resultado_usuario['email'];

                    header('location:../homeUser.php');
                }
                else{
                    if($email&&$senha) {
                    $consulta = "SELECT * FROM professores WHERE email  = '$email' AND senha = '$senha'";
                    $resultado = $connection->query($consulta);
                    $registros = $resultado->num_rows;
                    $resultado_usuario = mysqli_fetch_assoc($resultado);

                        if ($registros<>0) {
                            $_SESSION['codProfessor'] = $resultado_usuario['codProfessor'];
                            $_SESSION['nomeProfessor'] = $resultado_usuario['nome'];
                            $_SESSION['emailProfessor'] = $resultado_usuario['email'];

                            header('location:../homeProf.php');
                        }
                else{
                    if($email && $senha) {
                    $consulta = "SELECT * FROM especialistas WHERE email  = '$email' AND senha = '$senha'";
                    $resultado = $connection->query($consulta);
                    $registros = $resultado->num_rows;
                    $resultado_usuario = mysqli_fetch_assoc($resultado);

                        if ($registros<>0) {
                            $_SESSION['codEspecialista'] = $resultado_usuario['codEspecialista'];
                            $_SESSION['nomeEspecialista'] = $resultado_usuario['nome'];
                            $_SESSION['emailEspecialista'] = $resultado_usuario['email'];

                            header('location:../esp.php');
                        }else{
                            header('location:../login.php');
                        }
                        }

                    }
                }
            
    
    } } //if user  
        } //else user
    } //ifzao
    else{
            header('location:../login.php');
        }
?>