



import javax.swing.JOptionPane;
public class exercicio11 {
	public static void main(String [] args) {

		int numero;

		numero = Integer.parseInt(JOptionPane.showInputDialog("Insira um n�mero:"));

		if( (numero % 2) == 0 ){
			JOptionPane.showMessageDialog(null,"� m�ltiplo de 2!");
		}
		else{
			JOptionPane.showMessageDialog(null,"N�o � m�ltiplo de 2! ");
		}
	}
}