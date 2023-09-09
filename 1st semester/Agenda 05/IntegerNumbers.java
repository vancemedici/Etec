package integernumbers;

import javax.swing.JOptionPane;
public class IntegerNumbers {
    public static void main(String[] args) {
        int num1, num2, plus, times;
        num1 = Integer.parseInt(JOptionPane.showInputDialog("Insira o primeiro número inteiro"));
        num2 = Integer.parseInt(JOptionPane.showInputDialog("Insira o segundo número inteiro"));
        if (num1 == num2) {
            plus = num1 + num2;
            JOptionPane.showMessageDialog(null, "A soma desses números é igual à " + plus);
        } else {
            times = num1 * num2;
            JOptionPane.showMessageDialog(null, "O produto desses números é igual à " + times);
        }
    }
}
