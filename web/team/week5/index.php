<?php

    require "dbConnect.php";
    $db = get_db();

    $family_members = $db->prepare("SELECT * FROM w5_family_members");
    $family_members->execute();

    while ($fRow = $family_members->fetch(PDO::FETCH_ASSOC))
    {
        $first_name = $fRow["first_name"];
        $last_name = $fRow["last_name"];
        $relationship_id = $fRow["relationship_id"];

        $relationships = $db->prepare("SELECT description FROM w5_relationships WHERE id = 2");
        $relationships->ececute();
        while($rRow = $relationships->fetch(PDO::FECTCH_ASSOC)) 
        {
            $relationships = $rRow["description"];
        }
        echo "<p>$first_name $last_name is my $relationships ($relationship_id)</p>";
    }

?>