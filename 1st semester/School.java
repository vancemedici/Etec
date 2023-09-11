import java.util.Scanner;

public class DisplayStudentData {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        System.out.print("Digite o nome do estudante ");
        String name = input.nextLine();

        System.out.print("Em que série ele está? ");
        String grade = input.nextLine();

        System.out.print("Qual é o telefone desse estudante? ");
        String phoneNumber = input.nextLine();

        System.out.print("Qual é a média desse estudante? ");
        double average = input.nextDouble();

        input.nextLine();

        System.out.println("--------------------Técnico em Informática Ead--------------------");
        System.out.println("Nome: " + name);
        System.out.println("Teoefone " + phoneNumber);
        System.out.println("Série " + grade);
        System.out.println("-------------------------------------------------------------------------");
        System.out.println("Média " + average);
        System.out.println("-------------------------------------------------------------------------");

        input.close();
    }
}
