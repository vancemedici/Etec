package velox;

import java.util.Scanner;
import java.text.DecimalFormat;

public class Velox {
    public static void main(String[] args) {
        String model;
        int days;
        double daily, kilometers, expenses;
        DecimalFormat fmt = new DecimalFormat("#,###,###.##");
        Scanner input = new Scanner(System.in);

        System.out.println("Qual carro foi alugado?");
        model = input.next();
        System.out.println("Quanto custa a diária desse modelo?");
        daily = input.nextDouble();
        System.out.println("Alugaram-o por quantos dias?");
        days = input.nextInt();
        System.out.println("Foram percorridos quantos quilômetros?");
        kilometers = input.nextDouble();

        expenses = days * daily + kilometers * 0.79;

        System.out.println("O modelo de carro alugado foi: " + model);
        System.out.println("As despesas totalizam R$ " + fmt.format(expenses));

    }
}
