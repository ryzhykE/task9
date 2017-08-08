<?php

class HtmlHelper
{
    /**
     * @param $class
     * @param $size
     * @param bool $multiple
     * @param $option
     * @return string
     */
    public static function select($class,$size,$multiple=false,$option)
    {
        $select = '<select ';
        if(isset($class))
        {
            $select .= ' class='."'$class'";
        }
        if(isset($size))
        {
            $select .= ' size='."'$size'";
        }
        if($multiple !=false)
        {
            $select .= ' multiple';
        }
        $select .= '>';
        foreach($option as $value=>$data)
        {
            $select  .= '<option value="' . $value . '">' . $data  .'</option>' ;
        }
        $select .= '</select>';
        return $select;

    }

    /**
     * @param $class
     * @param array $header
     * @param array $data
     * @return string
     */
    public static function tables($class ,$header=[] ,$data = [] )
    {
        $table = '<table ';
        if(isset($class))
        {
            $table .= ' class='."'$class'";
        }
        $table .= '>';
        $table .= '<tr>';
        foreach($header as $val)
        {
            $table .= '<th>'. $val .'</th>';
        }
        $table .= '</tr> <tr>';

        foreach($data as  $val)
        {
            $table .= '<td>'. $val .'</td>';

        }
        $table .= '</tr> </table>';
        return $table;
    }

    /**
     * @param $teg
     * @param $option
     * @return string
     */
    public static function listUlOl($teg,$option)
    {
        $list = '<'.$teg.'>';
        foreach($option as $value )
        {
            $list .= '<li>' . $value . '</li>';
        }
        $list .= '</' . $teg . '>';
        return $list;
    }

    /**
     * @param array $data
     * @return string
     */
    public static function listDlDtDd($data = [])
    {
        $list = "<dl>";
        foreach($data as $title => $value)
        {
            $list .= '<dt>' .$title . '</dt>';
            $list .= '<dd>'. $value . '</dd>';
        }
        $list .= "</dl>";
        return $list;
    }

    /**
     * @param array $data
     * @param $name
     * @return string
     */


    public static function radiobutton($class,$data = [], $name)
    {
        $radio = '<label class="'.$class.'">';
        foreach($data as $key => $val)
        {
            $radio .= '<input type="radio"  name= "'.$name.'" value="'.$key.'">' . $val;
        }
        $radio .= "</label>";
        return $radio;
    }

    /**
     * @param $class
     * @param array $data
     * @param $checks
     * @return string
     */
    public static function checkbox($class, $data =[] ,$checks)
    {
        $check = '<label class="'.$class.'">';

        foreach($data as $key => $val)
        {
            $check .= '<input type="checkbox" name= "'.$val.'" value="'.$key.'"'.(($val == $checks)?'checked' : ' ').'>' . $val;
        }
        $check .= "</label >";
        return $check;
    }
}



