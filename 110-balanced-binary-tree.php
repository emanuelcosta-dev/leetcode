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
    public $balanced;
    public $height;

    public function __construct($balanced = true, $height = 0)
    {
        $this->balanced = $balanced;
        $this->height = $height;
    }
}

class Solution
{

    /**
     * @param TreeNode $root
     * @return Boolean
     */
    function isBalanced($root)
    {
        return $this->checkBalance($root)->balanced;
    }

    function checkBalance($node)
    {
        if ($node === null) {
            return new TreeInfo();
        }

        $leftInfo = $this->checkBalance($node->left);
        $rightInfo = $this->checkBalance($node->right);

        $currentHeight = 1 + max($leftInfo->height, $rightInfo->height);
        $balanced = $leftInfo->balanced && $rightInfo->balanced && abs($leftInfo->height - $rightInfo->height) <= 1;

        return new TreeInfo($balanced, $currentHeight);
    }
}

// Example usage:
$tree = new TreeNode(
    3,
    new TreeNode(9),
    new TreeNode(20, new TreeNode(15), new TreeNode(7))
);

$solution = new Solution();
$balanced = $solution->isBalanced($tree);
echo $balanced ? "true" : "false";
