<?php


// Definition for a binary tree node.
class TreeNode
{
    public $val = null;
    public $left = null;
    public $right = null;
    function __construct($val = 0, $left = null, $right = null)
    {
        $this->val = $val;
        $this->left = $left;
        $this->right = $right;
    }
}

class TreeInfo
{
    public $diameter;
    public $depth;

    public function __construct($diameter = 0, $depth = 0)
    {
        $this->diameter = $diameter;
        $this->depth = $depth;
    }
}

class Solution
{

    /**
     * @param TreeNode $root
     * @return Integer
     */
    function diameterOfBinaryTree($root)
    {
        return $this->findDiameter($root)->diameter;
    }

    function findDiameter($node)
    {
        if ($node === null) {
            return new TreeInfo();
        }

        $leftInfo = $this->findDiameter($node->left);
        $rightInfo = $this->findDiameter($node->right);

        $currentDiameter = max($leftInfo->diameter, $rightInfo->diameter, $leftInfo->depth + $rightInfo->depth);
        $currentDepth = 1 + max($leftInfo->depth, $rightInfo->depth);

        return new TreeInfo($currentDiameter, $currentDepth);
    }
}

$tree = new TreeNode(
    1,
    new TreeNode(2, new TreeNode(4), new TreeNode(5)),
    new TreeNode(3)
);

$solution = new Solution();
$diameter = $solution->diameterOfBinaryTree($tree);
echo $diameter;
