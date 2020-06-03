

import javax.swing.JOptionPane;
public class exercicio19{
	public static void main(String [] args){
		String solicitacao;
		int numero;

		solicitacao = JOptionPane.showInputDialog(null,"Escreva uma frase: ");
		numero = Integer.parseInt(JOptionPane.showInputDialog(null,"Número de vezes que deseja vê-la :"));

		for(int i = 0; i<(+numero); i++){
			JOptionPane.showMessageDialog(null, " \n"+solicitacao);
		}
	}
}