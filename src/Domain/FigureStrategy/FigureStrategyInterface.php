<?php

namespace ChessDomain\FigureStrategy;

use ChessDomain\Entity\ChessBoard;
use ChessDomain\Entity\ChessFigure;
use ChessDomain\ValueObject\Cell;

interface FigureStrategyInterface 
{
    public function moveTo(ChessBoard $chessBoard, ChessFigure $figure, Cell $to);
    public function getName();
}
