


import javax.swing.JOptionPane;
public class exercicio12 {
	public static void main(String [] args) {

		int numero1,numero2;

		numero1 = Integer.parseInt(JOptionPane.showInputDialog("Insira um n�mero inteiro:"));
		numero2 = Integer.parseInt(JOptionPane.showInputDialog("Insira outro n�mero inteiro:"));

		if (numero1>numero2) {
			
			JOptionPane.showMessageDialog(null, "O maior deles � "+numero1);
		}
		else { 
			if (numero2>numero1){
				JOptionPane.showMessageDialog(null, "O maior deles � "+numero2);
			}
			else {
				if (numero1 == numero2) { 
					JOptionPane.showMessageDialog(null, "Os n�meros s�o iguais!");
				}
			}
		}
	}
}