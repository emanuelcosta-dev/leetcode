<?php

/**
 * Definition for a binary tree node.
 */
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


class Solution
{
    /**
     * @param TreeNode $root
     * @return TreeNode
     */
    function invertTree($root)
    {
        if ($root === null)  return null;

        $temp = $root->left;
        $root->left = $this->invertTree($root->right);
        $root->right = $this->invertTree($temp);

        return $root;
    }
}
// Example usage:
$tree = new TreeNode(
    4,
    new TreeNode(2, new TreeNode(1), new TreeNode(3)),
    new TreeNode(7, new TreeNode(6), new TreeNode(9))
);

$solution = new Solution();
$invertedTree = $solution->invertTree($tree);
print_r($invertedTree);
