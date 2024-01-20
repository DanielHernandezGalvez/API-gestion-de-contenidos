import { StyleSheet, Text, View } from "react-native";

export default function App() {
  return (
    <View style={styles.container}>
      <Text style={styles.title}>
        Hola, <Text style={styles.textItalic}>Coder!</Text>
      </Text>
      <Text style={styles.subtitle}>
        Soy Daniel Gálvez, doy la bienvenida a mi primer entregable
      </Text>
    </View>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: "#1F2023",
    alignItems: "center",
    justifyContent: "center",
    paddingHorizontal: 25
  },
  title: {
    fontSize: 40,
    fontWeight: "bold",
    color: "#F2F2F2"
  },
  textItalic: {
    fontWeight: "bold",
    fontStyle: "italic",
    color: "#E5F876"
  },
  subtitle: {
    fontSize: 18,
    textAlign: "center",
    marginTop: 15,
    color: "#F2F2F2"
  },
});
