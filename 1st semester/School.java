import java.util.Scanner;

public class DisplayStudentData {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        System.out.print("Enter the student's name: ");
        String name = input.nextLine();

        System.out.print("Enter the student's grade: ");
        String grade = input.nextLine();

        System.out.print("Enter the student's phone number: ");
        String phoneNumber = input.nextLine();

        System.out.print("Enter the student's average: ");
        double average = input.nextDouble();

        input.nextLine();

        System.out.println("--------------------Técnico em Informática Ead--------------------");
        System.out.println("Name: " + name);
        System.out.println("Phone Number: " + phoneNumber);
        System.out.println("Grade: " + grade);
        System.out.println("-------------------------------------------------------------------------");
        System.out.println("Average: " + average);
        System.out.println("-------------------------------------------------------------------------");

        input.close();
    }
}
