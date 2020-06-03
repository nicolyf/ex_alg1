



import javax.swing.JOptionPane;
public class exercicio16{
	public static void main(String [] args) {
		int pergunta;
		double numero1,numero2,resultado;

		numero1 = Double.parseDouble(JOptionPane.showInputDialog(null, "Insira um número."));
		numero2 = Double.parseDouble(JOptionPane.showInputDialog(null, "Insira um número."));
		pergunta = Integer.parseInt(JOptionPane.showInputDialog("Qual operação você quer executar? "
		+ " \n 1 - adição \n 2 - subtração \n 3 - multiplicação \n 4 divisão"));
		switch(pergunta){
			case 1:
				resultado = numero1 + numero2;
				JOptionPane.showMessageDialog(null, "O resultado é: "+resultado);
			break;

			case 2:
				resultado = numero1 - numero2;
				JOptionPane.showMessageDialog(null, "O resultado é: "+resultado);
			break;

			case 3:
				resultado = numero1 * numero2;
				JOptionPane.showMessageDialog(null, "O resultado é: "+resultado);
			break;

			case 4:
				resultado = numero1 / numero2;
				JOptionPane.showMessageDialog(null, "O resultado é: "+resultado);
			break;
		}
	}
}