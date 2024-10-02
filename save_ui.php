<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the values from the Ajax request
    $bgColor = $_POST['bgColor'];
    $fontColor = $_POST['fontColor'];
    $btnColor = $_POST['btnColor'];
    $fontSize = $_POST['fontSize'];
    // Login page text
    $loginTitle = $_POST['loginTitle'];
    $loginUsernamePlaceholder = $_POST['loginUsernamePlaceholder'];
    $loginPasswordPlaceholder = $_POST['loginPasswordPlaceholder'];
    $loginButtonText = $_POST['loginButtonText'];

    // Registration page text
    $registerTitle = $_POST['registerTitle'];
    $registerUsernamePlaceholder = $_POST['registerUsernamePlaceholder'];
    $registerEmailPlaceholder = $_POST['registerEmailPlaceholder'];
    $registerPasswordPlaceholder = $_POST['registerPasswordPlaceholder'];
    $registerButtonText = $_POST['registerButtonText'];

    // Save the settings to a file (you can save to a database instead)
    $settings = array(
        'bgColor' => $bgColor,
        'fontColor' => $fontColor,
        'btnColor' => $btnColor,
        'loginTitle' => $loginTitle,
        'loginUsernamePlaceholder' => $loginUsernamePlaceholder,
        'loginPasswordPlaceholder' => $loginPasswordPlaceholder,
        'loginButtonText' => $loginButtonText,
        'registerTitle' => $registerTitle,
        'registerUsernamePlaceholder' => $registerUsernamePlaceholder,
        'registerEmailPlaceholder' => $registerEmailPlaceholder,
        'registerPasswordPlaceholder' => $registerPasswordPlaceholder,
        'registerButtonText' => $registerButtonText,
        'fontSize' => $fontSize
    );

    // Write the settings to a JSON file
    if (file_put_contents('ui_settings.json', json_encode($settings))) {
        echo json_encode(array('status' => 'success'));
    } else {
        echo json_encode(array('status' => 'error'));
    }
} else {
    echo json_encode(array('status' => 'invalid_request'));
}
?>
