<?php


class Graph
{
    private int $numberOfVertices;
    private int $edges = 0;
    private array $adj = array();

    public function __construct($numberOfVertices)
    {
        $this->numberOfVertices = $numberOfVertices;

        for ($i = 0; $i < $this->numberOfVertices; ++$i){
            $this->adj[$i] = array();
        }
    }

    public function addEdge($v1, $v2){
        array_push($this->adj[$v1], $v2);
        array_push($this->adj[$v2], $v1);
        $this->edges++;
    }

    public function showAdjList(){
        for ($i = 0; $i < $this->numberOfVertices; ++$i){
            $list = $i;
            for ($j = 0; $j < $this->numberOfVertices; ++$j){
                if (isset($this->adj[$i][$j])){
                    $list .= '--> ' . $this->adj[$i][$j];
                }
            }
            echo $list . "<br>";
        }
    }

}

$graph = new Graph(7);
$graph->addEdge(0,1);
//$graph->addEdge(1,0);

$graph->addEdge(0,2);
//$graph->addEdge(2,0);

$graph->addEdge(1,2);
//$graph->addEdge(2,1);

$graph->addEdge(1,3);
//$graph->addEdge(3,1);

$graph->addEdge(2,4);
//$graph->addEdge(4,2);

$graph->addEdge(3,4);
//$graph->addEdge(4,3);

$graph->addEdge(4,5);
//$graph->addEdge(5,4);

$graph->addEdge(5,6);
//$graph->addEdge(6,5);
$graph->showAdjList();