package newinfo;

import javax.swing.JOptionPane;
public class NewInfo {
    public static void main(String[] args) {
        int age;
        age = Integer.parseInt(JOptionPane.showInputDialog("Quantos anos você tem?"));
        if (age < 60) {
            JOptionPane.showMessageDialog(null, "Vá para a fila comum");
        } else if (age >= 60 && age <= 80) {
            JOptionPane.showMessageDialog(null, "Vá para a fila prioritária");
        }
        else{
            JOptionPane.showMessageDialog(null, "Vá para a fila 80+");
        }
    }

}
