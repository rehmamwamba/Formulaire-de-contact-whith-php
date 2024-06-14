<?php

class Table {
    protected $headers;
    protected $data;

    public function __construct($headers, $data) {
        $this->headers = $headers;
        $this->data = $data;
    }

    public function render() {
        $html = '<table>';
        
        $html .= '<thead><tr>';
        foreach ($this->headers as $header) {
            $html .= "<th>$header</th>";
        }
        $html .= '</tr></thead>';

       
        $html .= '<tbody>';
        foreach ($this->data as $row) {
            $html .= '<tr>';
            foreach ($row as $cell) {
                $html .= "<td>$cell</td>";
            }
            $html .= '</tr>';
        }
        $html .= '</tbody>';

        $html .= '</table>';
        return $html;
    }
}

?>
