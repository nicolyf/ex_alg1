



import javax.swing.JOptionPane;
public class exercicio10 {
	public static void main(String[] args) {
		
		int numero1, numero2, soma;

		numero1 = Integer.parseInt(JOptionPane.showInputDialog("Insira um n�mero:"));
		numero2 = Integer.parseInt(JOptionPane.showInputDialog("Insira um n�mero:"));
		

		if ( numero1 > 5 && numero2 > 5 ) {
			soma = numero1 + numero2;
		
			JOptionPane.showMessageDialog(null,"O resultado �: "+soma);
		}
	}
}