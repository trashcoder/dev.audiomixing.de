<!doctype html>
<html>

<head>
    <link rel="stylesheet" href="styles/mainstyle.css">
    <title>dev.audiomixing.de - Zig Funktion per Dart FFI aufrufen</title>
</head>

<body>

    <h3><a href="./zig_funktion_per_dart_ffi_aufrufen.php">Zig Funktion
            per Dart FFI
            aufrufen</a>
        <img src="./images/logo_zig.svg" class="logo" />
    </h3>
    <p>In meinem Beispiel &uuml;bergebe ich aus Dart eine Liste mit unbestimmter L&auml;nge an eine Zig Funktion. Dort
        wird
        die Summe der Elemente des Arrays gebildet und an Dart zur&uuml;ckgegeben:</p>
    Zuerst erstelle ich ein Dart
    Projekt mit
    <pre><code>dart init</code></pre>
    Anschlie&szlig;end erstelle ich im Hauptverzeichnis des Projektes ein Unterverzeichnis mit Namen "linux_64"
    Dort hinein speichere ich die folgende Zig-Datei mit dem Namen "test06.zig":
    <pre><code>
const std = @import("std");
export fn sum(myArray: [*]const i32, arraySize: usize) i32 {
    var summe: i32 = 0;
    for (0..arraySize) |index| {
       summe += myArray[index];
    }
    return summe;
}</code></pre>
    Anschlie&szlig;end f&uuml;hre ich den folgenden Befehl aus, um aus der zig-Datei eine Library zu generieren:
    <pre><code>zig build-lib test06.zig -dynamic</code></pre>
    Jetzt m&uuml;ssten die folgenden Dateien erstellt worden
    sein: "libtest06.so" und "libtest06.so.o". Wer m&ouml;chte kann beim Erstellen der Librarys mit dem Parameter
    -ReleaseSmall die Filegr&ouml;&szlig;e noch verkleinern.

    Im bin-Verzeichnis erstelle ich die Datei "main.dart" und schreibe folgendes hinein:
    <pre><code>
import 'dart:ffi' as ffi;
import 'package:ffi/ffi.dart';
            
void main(List&lt;String&gt; arguments) {
    final list = [1, 2, 3, 4, 5];
    final listPtr = intListToArray(list);
            
    final myLib = ffi.DynamicLibrary.open('../linux_64/libtest06.so');
    final mySum = myLib.lookupFunction&lt;
    ffi.Int32 Function(ffi.Pointer&lt;ffi.Int32&gt;, ffi.Int32),
        int Function(ffi.Pointer&lt;ffi.Int32&gt;, int)
        &gt;('sum');
            
    final result = mySum(listPtr, list.length);
    print('Result: $result');
    malloc.free(listPtr);
}
            
ffi.Pointer&lt;ffi.Int32&gt; intListToArray(List&lt;int&gt; list) {
    final ptr = malloc.allocate&lt;ffi.Int32&gt;(ffi.sizeOf&lt;ffi.Int32&gt;() * list.length);
    for (var i = 0; i &lt; list.length; i++) {
        ptr[i] = list[i];
    }
    return ptr;
}</code></pre>
    Anschlie&szlig;end f&uuml;hre ich die main.dart Datei mit dem folgenden Befehl aus:
    <pre><code>dart run main.dart</code></pre>


</body>

</html>