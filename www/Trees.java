class Node {
    int data;
    Node left;
    Node right;
}
class BST {
    public Node createNewNode(int k) {
        Node a = new Node();
        a.data = k;
        a.left = null;
        a.right = null;
        return a;
    }
    public Node insert(Node node, int val) {
        if (node == null) {
            return createNewNode(val);
        }
        if (val < node.data) {
            node.left = insert(node.left, val);
        } else if (val > node.data) {
            node.right = insert(node.right, val);
        }
        return node;
    }
}
public class Trees {
    public static void main(String[] args) {
        BST a = new BST();
        Node root = null;
        root = a.insert(root, 8);
        root = a.insert(root, 3);
        root = a.insert(root, 6);
    }
}