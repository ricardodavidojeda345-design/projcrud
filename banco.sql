.open banco.db
.mode column



CREATE TABLE IF NOT EXISTS ferramentas (
    id        INTEGER PRIMARY KEY AUTOINCREMENT,
    nome      TEXT NOT NULL,
    categoria TEXT NOT NULL,
    descricao TEXT,
    link      TEXT,
    gratuita  INTEGER DEFAULT 1
);

INSERT INTO ferramentas (nome, categoria, descricao, link, gratuita) VALUES
('ChatGPT',    'Texto',   'Assistente de IA da OpenAI.',     'https://chat.openai.com', 1),
('Midjourney', 'Imagens', 'Gera imagens a partir de texto.', 'https://midjourney.com',  0),
('ElevenLabs', 'Audio',   'Narracoes em voz humana com IA.', 'https://elevenlabs.io',   1);
