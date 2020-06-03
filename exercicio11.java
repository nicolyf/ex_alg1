



import javax.swing.JOptionPane;
public class exercicio11 {
	public static void main(String [] args) {

		int numero;

		numero = Integer.parseInt(JOptionPane.showInputDialog("Insira um número:"));

		if( (numero % 2) == 0 ){
			JOptionPane.showMessageDialog(null,"É múltiplo de 2!");
		}
		else{
			JOptionPane.showMessageDialog(null,"Não é múltiplo de 2! ");
		}
	}
}