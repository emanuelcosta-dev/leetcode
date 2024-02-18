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

class Solution
{

    /**
     * @param TreeNode $root
     * @param TreeNode $subRoot
     * @return Boolean
     */

    function isSubtree($s, $t)
    {
        if ($s === null) {
            return false;
        }

        if ($this->isSameTree($s, $t) || $this->isSubtree($s->left, $t) || $this->isSubtree($s->right, $t)) {
            return true;
        }

        return false;
    }

    function isSameTree($x, $y)
    {
        if ($x === null && $y === null) {
            return true;
        }

        if ($x === null || $y === null || $x->val !== $y->val) {
            return false;
        }

        return $this->isSameTree($x->left, $y->left) && $this->isSameTree($x->right, $y->right);
    }
}

$treeS = new TreeNode(3, new TreeNode(4, new TreeNode(1), new TreeNode(2)), new TreeNode(5));
$treeT = new TreeNode(4, new TreeNode(1), new TreeNode(2));

$solution = new Solution();
$result = $solution->isSubtree($treeS, $treeT);
echo $result ? "true" : "false";
