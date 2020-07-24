<?php
function inputElement($icon, $placeholder, $name, $value) {
    $ele = '
    <div class="input-group mb-2">
        <div class="input-group-prepend">
            <div class="input-group-text">' . $icon . '</div>
        </div>
        <input type="text" class="form-control" name="' . $name . '" value="' . $value . '" id="inlineFormInputGroup" placeholder='. $placeholder . ' />    
    </div>
    ';
    return $ele;
}

function buttonElement($id, $styleclass, $text, $name, $attr) {
    $btn = "
        <button name='$name' '$attr' class='$styleclass' id='$id'>$text</button>
    ";
    return $btn;
}

?>