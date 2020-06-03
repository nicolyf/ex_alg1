



import javax.swing.JOptionPane;
public class exercicio13 {
	public static void main(String [] args) {
		double salario, prestacao, emprestimo;

		salario = Double.parseDouble(JOptionPane.showInputDialog("Insira seu salário:"));
		prestacao = Double.parseDouble(JOptionPane.showInputDialog("Insira o valor da prestação:"));
		emprestimo = salario * 0.3;
		

		if ( prestacao < emprestimo) {
			
			JOptionPane.showMessageDialog(null, "Seu crédito foi aceito!");
		} 
		else {
			if (prestacao > emprestimo){
				JOptionPane.showMessageDialog(null, "Seu crédito foi negado.");
			}
		}
	}
}