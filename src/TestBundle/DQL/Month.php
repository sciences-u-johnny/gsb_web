<?php

/**
 * Created by PhpStorm.
 * User: alan9
 * Date: 25/03/2017
 * Time: 17:57
 */
namespace TestBundle\DQL;


use Doctrine\ORM\Query\AST\Functions\FunctionNode;
use Doctrine\ORM\Query\Lexer;
use Doctrine\ORM\Query\Parser;
use Doctrine\ORM\Query\SqlWalker;

/**
 * DateFunction ::= "MONTH" "(" ArithmeticPrimary ")"
 */
class Month extends FunctionNode
{
    public $dateExpression;

    public function parse(Parser $parser)
    {
        $parser->match(Lexer::T_IDENTIFIER);
        $parser->match(Lexer::T_OPEN_PARENTHESIS);
        $this->dateExpression = $parser->ArithmeticPrimary();
        $parser->match(Lexer::T_CLOSE_PARENTHESIS);
    }

    public function getSql(SqlWalker $sqlWalker)
    {
        return 'MONTH(' .
        $this->dateExpression->dispatch($sqlWalker) .
        ')';
    }
}