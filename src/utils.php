<?php
    function get_file($file)
    {
        if (!file_exists($file))
            {return (FALSE);}
        $tmp = file_get_contents($file);
        return (unserialize($tmp));
    }

    function insert_file($dest, $src)
    {
        if (empty($dest) || empty($src))
            {return (FALSE);}
        $data = get_file($dest);
        $data[] = $src;
        file_put_contents($dest, serialize($data));
        return (TRUE);
    }


?>