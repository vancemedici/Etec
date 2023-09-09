import javax.swing.JOptionPane;

public class Main {
    public static void main(String[] args) {
        double a = Double.parseDouble(JOptionPane.showInputDialog("Insira o valor de a"));
        double b = Double.parseDouble(JOptionPane.showInputDialog("Insira o valor de b"));
        double c = Double.parseDouble(JOptionPane.showInputDialog("Insira o valor de c"));
        
        double delta = Math.pow(b, 2) - 4 * a * c;
        JOptionPane.showMessageDialog(null, "O valor de delta é " + delta);

        if (delta < 0) {
            JOptionPane.showMessageDialog(null, "Não existem raízes reais");
        } else if (delta == 0) {
            double x = -b / (2 * a);
            JOptionPane.showMessageDialog(null, "Só há uma raiz real, cujo valor é " + x);
        } else {
            double x1 = (-b + Math.sqrt(delta)) / (2 * a);
            double x2 = (-b - Math.sqrt(delta)) / (2 * a);
            JOptionPane.showMessageDialog(null, "Os valores das raízes reais são iguais à " + x1 + " e à " + x2);
        }
    }
}
