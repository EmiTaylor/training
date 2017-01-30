<?php
$sage="oui";
$note=12;


/*if ($note<=5)
{
    echo "c'est mauvais";
}
elseif ($note<=10)
    {
        echo "c'est moyen";
    }
    elseif ($note<=15)
        {
            echo "c'est bien";
        }
        elseif ($note>=15)
            {
                echo "c'est très bien";
            }
?>*/

if ($note<=10 && $sage=="non")
{
    echo "pas bien";
}
else 
{
    echo "bravo";
}
