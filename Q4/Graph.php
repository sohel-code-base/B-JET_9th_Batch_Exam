<?php


class Graph
{
    private int $numberOfVertices;
    private int $edges = 0;
    private int $summation = 0;
    private array $adj = array();

    public function __construct($numberOfVertices)
    {
        $this->numberOfVertices = $numberOfVertices;

        for ($i = 0; $i < $this->numberOfVertices; ++$i){
            $this->adj[$i] = array();
        }
    }

    public function addEdge($v1, $v2, $weight)
    {
        $this->adj[$v1][$v2] = $weight;
        $this->adj[$v2][$v1] = $weight;
        $this->edges++;
    }

    public function showAdjList()
    {
        echo "<h2>Adjacency List:</h2>";
        for ($i = 0; $i < $this->numberOfVertices; ++$i){
            $list = $i;

            if (isset($this->adj[$i])){
                foreach ($this->adj[$i] as $vertex => $weight) {
                    $list .= '--> ' . $vertex;
                }
            }
            echo $list . "<br>";
        }
    }

    public function showAdjMatrix()
    {
        echo "<h2>Adjacent Matrix:</h2>";
        echo "<table border='1' width='500px'><tbody>";
        foreach ($this->adj as $rows) {
            echo "<tr>";
            for ($i = 0; $i < $this->numberOfVertices; ++$i){
                echo "<td align='center'>";
                if (isset($rows[$i])){
                    echo $rows[$i];
                    $this->summation += $rows[$i];
                }else{
                    echo 0;
                }
                echo "</td>";
            }
            echo "</tr>";
        }

        echo "</tbody></table>";
        echo "<h2>Total Summation= $this->summation</h2>";
    }

}

$graph = new Graph(7);
$graph->addEdge(0,1,6);
$graph->addEdge(0,2,7);
$graph->addEdge(1,2,13);
$graph->addEdge(1,3,8);
$graph->addEdge(2,4,10);
$graph->addEdge(3,4,9);
$graph->addEdge(4,5,11);
$graph->addEdge(5,6, 12);

$graph->showAdjList();
$graph->showAdjMatrix();