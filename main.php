<?php

$name  = 'ariadenus';
$array = [["name" => "ariadenus", "inner" => ["pregnant" => "mistake", "arrives" => "miscake"]], ["name" => "mdnh"]];

create_obj ($array);

function create_obj ($array)
{
    echo '[';

    for ($i = 0; $i < count ($array); $i++):

        echo '{';
        foreach ($array[$i] as $key => $value):

            if ($array[$i][$key] != end ($array[$i])):

                echo '"'. $key .'": '. check_array ($value) .'",';

            elseif ($array[$i] == end ($array) && $array[$i][$key] == end ($array[$i])):

                echo '"'. $key .'": '. check_array ($value) .'"}]';
            else:

                echo '"'. $key .'": '. check_array ($value) .'},';
            endif;

        endforeach;
    endfor;

}

function check_array ($input): string
{
    if (is_array ($input))
    {
        $result = "{";

        foreach ($input as $key => $value):

            if ($value != end ($input)):
                $result .= "\"{$key}\": \"{$value}\",\n\t\t";
            else:
                $result .= "\"{$key}\": \"{$value}\"";
            endif;
        
        endforeach;
        return $result . "}";
    }
    else return '"' . $input;

}