



import javax.swing.JOptionPane;
public class exercicio16{
	public static void main(String [] args) {
		int pergunta;
		double numero1,numero2,resultado;

		numero1 = Double.parseDouble(JOptionPane.showInputDialog(null, "Insira um n�mero."));
		numero2 = Double.parseDouble(JOptionPane.showInputDialog(null, "Insira um n�mero."));
		pergunta = Integer.parseInt(JOptionPane.showInputDialog("Qual opera��o voc� quer executar? "
		+ " \n 1 - adi��o \n 2 - subtra��o \n 3 - multiplica��o \n 4 divis�o"));
		switch(pergunta){
			case 1:
				resultado = numero1 + numero2;
				JOptionPane.showMessageDialog(null, "O resultado �: "+resultado);
			break;

			case 2:
				resultado = numero1 - numero2;
				JOptionPane.showMessageDialog(null, "O resultado �: "+resultado);
			break;

			case 3:
				resultado = numero1 * numero2;
				JOptionPane.showMessageDialog(null, "O resultado �: "+resultado);
			break;

			case 4:
				resultado = numero1 / numero2;
				JOptionPane.showMessageDialog(null, "O resultado �: "+resultado);
			break;
		}
	}
}