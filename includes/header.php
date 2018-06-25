<?php require_once 'php_action/core.php'; ?>


<!DOCTYPE html>
<html>
<head>

	<title>Personal Data Sheet</title>

	<!-- bootstrap added new modal-xl in un-minified version-->
	<link rel="stylesheet" href="assests/bootstrap/css/bootstrap.min.css">
	<!-- bootstrap grid-->
	<link rel="stylesheet" href="assests/bootstrap/css/bootstrap-grid.min.css">
	<!-- bootstrap4-glyphicons(font awesome $ glyphicons)-->
	<link href="assests/bootstrap4-glyphicons/css/bootstrap-glyphicons.min.css" rel="stylesheet" type="text/css" />
        <!-- custom css -->
        <link rel="stylesheet" href="custom/css/custom.css">
        <!-- DataTables -->
        <link rel="stylesheet" href="assests/plugins/datatables/jquery.dataTables.min.css">
        <!-- file input -->
        <link rel="stylesheet" href="assests/plugins/fileinput/css/fileinput.min.css">
        <!-- jquery -->
        <script src="assests/jquery/jquery.min.js"></script>
        <!-- jquery ui -->  
        <link rel="stylesheet" href="assests/jquery-ui/jquery-ui.min.css">
        <script src="assests/jquery-ui/jquery-ui.min.js"></script>
        <!-- bootstrap js -->
        <script src="assests/bootstrap/js/bootstrap.min.js"></script>
        
        <style>
            .kv-avatar .krajee-default.file-preview-frame,.kv-avatar .krajee-default.file-preview-frame:hover {
                margin: 0;
                padding: 0;
                border: none;
                box-shadow: none;
                text-align: center;
            }
            .kv-avatar {
                display: inline-block;
            }
            .kv-avatar .file-input {
                display: table-cell;
                width: 200px;
            }
            .kv-reqd {
                color: red;
                font-family: monospace;
                font-weight: normal;
            }
            
            @media (min-width: 992px) {
                .modal-xl {
                    max-width: 1200px;
                }
            }
        </style>

        
</head>
<body>

	<div class="container" style="max-width: 1280px;">