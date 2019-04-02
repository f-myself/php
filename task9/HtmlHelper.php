<?php

class HtmlHelper 
{
    public static function makeSelect ($type="single", $arrSelect)
    {
        $fullOptions = "";
        if (is_array($arrSelect))
        {
            foreach ($arrSelect as $value)
            {
                $fullOptions .= "<option>" . $value . "</option>";
            }
            if ($type == "multi")
            {
                return "<select multiple>" . $fullOptions . "</select>";
            }
            if ($type == "single")
            {
                return "<select>" . $fullOptions . "</select>";
            }
        }
        return false;
    }

    public static function table ($thead, $tcontent, $tfooter)
    {
        $fullTable = "<table>";
        if (is_array($thead))
        {
            $fullTable .= "<thead>\n<tr>";
            foreach ($thead as $key => $value)
            {
                $fullTable .= "<td>" . $value . "</td>";
            }
            $fullTable .= "</tr></thead>";
        }

        if (is_array($tbody))
        {
            $fullTable .= "<tbody>\n";
            foreach ($thead as $key => $value)
            {
                $fullTable .= "<tr>";
                foreach ($value as $td)
                {
                    $fullTable .= "<td>" . $td . "</td>";
                }
                $fullTable .= "<tr>";
            }
            $fullTable .= "</tbody>";
        }
        if (is_array($tfooter))
        {
            $fullTable .= "<tfoot>\n<tr>";
            foreach ($thead as $key => $value)
            {
                $fullTable .= "<td>" . $value . "</td>";
            }
            $fullTable .= "</tr></tfoot>";
        }
        return $fullTable . "</table>";
    }

    public static function makeList($type="ul", $arrLi)
    {
        $fullLi = "";
        if (is_array($arrLi))
        {
            foreach ($arrLi as $value) 
            {
                $fullLi .= "<li>" . $value . "</li>\n";
            }
            
            if($type == "ul")
            {
                return "<ul>\n" . $fullLi . "</ul>\n";
            }

            if($type == "ol")
            {
                return "<ol>\n" . $fullLi . "</ol>\n";
            }
        }
        return false;
    }

    public static function definitionList ($list)
    {
        if (is_array($list))
        {
            $fullContent = "";
            foreach ($list as $key => $value)
            {
                $fullContent .= "<dt>" . $key . "</dt>\n<dd>" . $value . "</dd>";
            }
            return "<dl>" . $fullContent . "</dl>";
        }
        return false;
    }

    public static function radiobuttonsGroup ($name="default", $buttons)
    {
        if (is_array($buttons))
        {
            $radioContent = "";
            foreach ($buttons as $key => $value)
            {
                $radioContent .= "<label><input name='" . $name . "' type='radio' value='" . $key . "'>" . $value . "</label>";
            }
            return $radioContent;
        }
        return false;
    }

    public static function checkboxes ($name, $buttons)
    {
        if (is_array($buttons))
        {
            $checkboxContent = "";
            foreach ($buttons as $key => $value)
            {
                $checkboxContent .= "<label><input name='" . $name . "' type='checkbox' value='" . $key . "'>" . $value . "</label>";
            }
            return $checkboxContent;
        }
        return false;
    }
}