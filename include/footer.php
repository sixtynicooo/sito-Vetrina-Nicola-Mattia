<footer class="site-footer">
    <div class="footer-content">
        <p id="copyright"></p>
        <a href="../pagine/politica-cookie.php">Politica cookie</a>
    </div>
</footer>
</body>

</html>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const year = new Date().getFullYear();
        document.getElementById("copyright").textContent =
            `© ${year} Tutti i diritti riservati`;
});
</script>