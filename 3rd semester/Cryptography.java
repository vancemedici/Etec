import java.text.Normalizer;
import java.util.regex.Pattern;
import javax.swing.JOptionPane;

public class Cryptography {
    public static void main(String[] args) {
        String s = removeAccents(JOptionPane.showInputDialog(null, "Type a String ", "Original String", JOptionPane.INFORMATION_MESSAGE));
        char[] c = s.toCharArray();
        for (int i = 0; i < s.length(); i++) {
            int value = c[i];
            value += 10;
            if (value > 126) {
                value -= 126 - 32; //to ensure that the encryption returns to '!' after typing 'u'
            }
            c[i] = (char) value;
        }
        String S = String.valueOf(c);
        JOptionPane.showMessageDialog(null, S.replace("", " ").trim(), "Encrypted String", JOptionPane.INFORMATION_MESSAGE);
    }

    public static String removeAccents(String str) {
        String nfdNormalizedString = Normalizer.normalize(str, Normalizer.Form.NFD);
        Pattern pattern = Pattern.compile("\\p{InCombiningDiacriticalMarks}+");
        return pattern.matcher(nfdNormalizedString).replaceAll("");
    }
}
