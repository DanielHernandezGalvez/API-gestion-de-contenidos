import { StatusBar } from "expo-status-bar";
import { StyleSheet, Text, View } from "react-native";

export default function App() {
  return (
    <View style={styles.container}>
      <Text style={styles.title}>
        Hola, <Text style={styles.textItalic}>Coder!</Text>
      </Text>
      <Text style={styles.subtitle}>
        Soy Daniel Gálvez, doy la bienvenida al primer entregable
      </Text>
      <StatusBar style="auto" />
    </View>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: "#fff",
    alignItems: "center",
    justifyContent: "center",
    paddingHorizontal: 20
  },
  title: {
    fontSize: 40,
    fontWeight: "bold",
  },
  textItalic: {
    fontWeight: "bold",
    fontStyle: "italic",
  },
  subtitle: {
    fontSize: 18,
    textAlign: "center",
    marginTop: 15
  },
});
