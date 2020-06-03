


import javax.swing.JOptionPane;
public class exercicio12 {
	public static void main(String [] args) {

		int numero1,numero2;

		numero1 = Integer.parseInt(JOptionPane.showInputDialog("Insira um número inteiro:"));
		numero2 = Integer.parseInt(JOptionPane.showInputDialog("Insira outro número inteiro:"));

		if (numero1>numero2) {
			
			JOptionPane.showMessageDialog(null, "O maior deles é "+numero1);
		}
		else { 
			if (numero2>numero1){
				JOptionPane.showMessageDialog(null, "O maior deles é "+numero2);
			}
			else {
				if (numero1 == numero2) { 
					JOptionPane.showMessageDialog(null, "Os números são iguais!");
				}
			}
		}
	}
}