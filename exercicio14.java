


import javax.swing.JOptionPane;
public class exercicio14 {
	public static void main(String [] args) {
		int nascimento, data, idade;

		nascimento = Integer.parseInt(JOptionPane.showInputDialog("Insira o ano quem que você nasceu:"));
		data = Integer.parseInt(JOptionPane.showInputDialog("Insira o ano atual:"));

		if (data > nascimento) {
			
			idade = data - nascimento;

			JOptionPane.showMessageDialog(null, "Você tem "+idade+" anos.");
		}
	}
}