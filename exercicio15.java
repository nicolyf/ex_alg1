


import javax.swing.JOptionPane;
public class exercicio15 {
	public static void main (String [] args) {
		

		int idade;
		String nome;
		



		nome = JOptionPane.showInputDialog("Insira seu nome:");

		idade = Integer.parseInt(JOptionPane.showInputDialog("Insira sua idade:"));


		if ((idade >= 15) && (idade <= 25)) {
			JOptionPane.showMessageDialog(null, "ACEITO!");
		} 
		else {
			JOptionPane.showMessageDialog(null, "NEGADO.");
		}
	}
}