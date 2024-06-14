<?php

require_once 'Template/classes/Input.php';
require_once 'Template/classes/Session.php';
require_once 'Template/classes/HTMLElement.php';
require_once 'Template/Classes/Radio.php';
require_once 'Template/Classes/Request.php';
require_once 'Template/Classes/Select.php';
require_once 'Template/Classes/Table.php';
require_once 'Template/Classes/Textarea.php';
require_once 'Template/Classes/Bouton.php';
require_once 'Template/Classes/Checkbox.php';
require_once 'Template/Classes/Cookie.php';
require_once 'Template/Classes/FileUpload.php';
require_once 'Template/Classes/Form.php';

$input = new Input('text', 'user', 'Alice');
$input->setAttribute('class', 'form-control');

Session::start();
Session::set('user', 'Alice');
$userID = Session::get('Guest');

$textarea = new Textarea('comments', 'Write something...', ['class' => 'textarea']); 

echo $textarea->render();

$input = new Input('text', 'username', 'Alice', ['class' => 'input']);

echo $input->render();

$checkbox = new Checkbox('subscribe', 'yes', true, ['class' => 'checkbox']); 

echo $checkbox->render();

$options = ['us' => 'USA', 'ca' => 'Canada', 'uk' => 'United Kingdom'];
$select = new Select('country', $options, ['class' => 'dropdown']); 

echo $select->render();

$button = new Button('submit', 'submitBtn', 'Submit', ['class' => 'btn']);

echo $button->render();

$radio = new Radio('gender', 'male', true, ['class' => 'radio']); 

echo $radio->render();

$file = FileUpload::upload('myfile', 'uploads');
if ($file !== null) {
    echo "Le fichier a été téléchargé avec succès : $file";
} else {
    echo "Une erreur s'est produite lors du téléchargement du fichier.";
}

$form = new Form(['method' => 'post', 'action' => 'submit.php']); 
$form->addElement(new Input('text', 'username', 'Alice')); 
$form->addElement(new Input('password', 'password')); 
$form->addElement(new HTMLElement('button', ['type' => 'submit'], 'Submit')); 

echo $form->render();

$table = new Table(
    ['Name', 'Age', 'City'],
    [
        ['Alice', 30, 'New York'],
        ['Bob', 25, 'Los Angeles']
    ]
);

echo $table->render();








?>
<!DOCTYPE html>
<html>
<head>
    <title>utilisation des classes</title>
</head>
<body>
   
    <?php echo $input->render(); ?>
</body>
</html>
