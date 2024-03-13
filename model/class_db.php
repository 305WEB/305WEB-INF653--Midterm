<?php


// ADD CLASS

function add_class($class) {
    
    global $db;

    $query = 'INSERT INTO classes (class) VALUES (:class)';

    $statement = $db->prepare($query);
    $statement->bindValue(':class', $class);
    $statement->execute();
    $statement->closeCursor();
}



// GET CLASSES

function get_classes() {

    global $db;

    $query = 'SELECT * FROM classes ORDER BY class_id';

    $statement = $db->prepare($query);
    $statement->execute();
    $classes = $statement->fetchAll();
    $statement->closeCursor();

    return $classes;
}


// DELETE CLASS

function delete_class($class_id) {

    global $db;

    $query = 'DELETE FROM classes where class_id = :class_id';

    $statement = $db->prepare($query);
    $statement->bindValue(':class_id', $class_id);
    $statement->execute();
    $statement->closeCursor();
}



// GET CLASS NAME

// function get_class($class_id) {

//     if (!$class_id) {

//         return "All Classes";
//     }

//     global $db;

//     $query = 'SELECT * FROM classes WHERE class_id = :class_id';

//     $statement = $db->prepare($query);

//     $statement->bindValue(':class_id', $class_id);
//     $statement->execute();
//     $class = $statement->fetch();
//     $statement->closeCursor();

//     $class = $class['Class'];

//     return $class;
// }






