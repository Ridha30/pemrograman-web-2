<!DOCTYPE html>
<html>
    <body>
        <?php
            $programmer_php = array('Andi', 'Budi', 'Wati', 'Gunawan', 'Baco', 'Becce', 'Fatma');
            $programmer_php = array('Andi', 'Fatma', 'Fadli', 'Haris', 'Baco');
        ?>
            <ul>
                <?php
                    sort($programmer_php);
                    foreach($programmer_php as $key => $val)
                    {
                            echo "$val\n<br>";
                    }
        ?>
    <br>
    <br>
                    <?php
                        rsort($programmer_phyhton);
                        foreach($programmer_phython as $key => $val)
                        {
                            echo "$key-$val\n<br>";
                        }

